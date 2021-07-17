const express = require('express');
const expressLayouts = require('express-ejs-layouts');
const mongoose = require('mongoose');
const passport = require('passport');
const flash = require('connect-flash');
const session = require('express-session');
const router = express.Router();
const bcrypt = require('bcryptjs');
// Load User model
const User = require('./models/User');
const { forwardAuthenticated } = require('./config/auth');
const router = express.Router();
const { ensureAuthenticated, forwardAuthenticated } = require('../config/auth');
const nodemailer = require('nodemailer');
const Reservation = require('./models/PostData');

const app = express();

// Passport Config
require('./config/passport')(passport);

// DB Config
const db = require('./config/keys').mongoURI;

// Connect to MongoDB
mongoose
  .connect(
    db,
    { useNewUrlParser: true, useUnifiedTopology: true}
  )
  .then(() => console.log('MongoDB Connected...'))
  .catch(err => console.log(err));

// EJS
app.use(expressLayouts);
app.set('view engine', 'ejs');

// middleware
app.use(express.static('public'));

// Express body parser
app.use(express.urlencoded({ extended: true }));

// Express session
app.use(
  session({
    secret: 'secret',
    resave: true,
    saveUninitialized: true
  })
);

// Passport middleware
app.use(passport.initialize());
app.use(passport.session());

// Connect flash
app.use(flash());

// Global variables
app.use(function(req, res, next) {
  res.locals.success_msg = req.flash('success_msg');
  res.locals.error_msg = req.flash('error_msg');
  res.locals.error = req.flash('error');
  next();
});

// Routes
//app.use('/', require('./routes/index.js'));
//app.use('/users', require('./routes/users.js'));

// Dashboard
router.get('/dashboard', ensureAuthenticated, (req, res) =>
  res.render('dashboard', {
    user: req.user
  })
);

// Login Page
router.get('/login', forwardAuthenticated, (req, res) => res.render('login'));

// Register Page
router.get('/register', forwardAuthenticated, (req, res) => res.render('register'));

// Register
router.post('/register', (req, res) => {
  const { name, email, password} = req.body;
  let errors = [];

  if (!name || !email || !password) {
    errors.push({ msg: 'Please enter all fields' });
  }

  if (password) {
    errors.push({ msg: 'Passwords do not match' });
  }

  if (password.length < 6) {
    errors.push({ msg: 'Password must be at least 6 characters' });
  }

  if (errors.length > 0) {
    res.render('register', {
      errors,
      name,
      email,
      password
    });
  } else {
    User.findOne({ email: email }).then(user => {
      if (user) {
        errors.push({ msg: 'Email already exists' });
        res.render('register', {
          errors,
          name,
          email,
          password
        });
      } else {
        const newUser = new User({
          name,
          email, 
          password
        });

        bcrypt.genSalt(10, (err, salt) => {
          bcrypt.hash(newUser.password, salt, (err, hash) => {
            if (err) throw err;
            newUser.password = hash;
            newUser
              .save()
              .then(user => {
                req.flash(
                  'success_msg',
                  'You are now registered and can log in'
                );
                res.redirect('/login');
              })
              .catch(err => console.log(err));
          });
        });
      }
    });
  }
});

// Register
// Booking Appointment
router.post('/post', ensureAuthenticated, (req, res) => {

  const { postID, userID, title, message } = req.body;
  let errors = [];

  if (!postID || !userID || !title || !message) {
    errors.push({ msg: 'Please enter all fields' });
  }
  if (errors.length > 0) {
      postID,
      userID,
      title,
      message
    
  } else {
        const newPostData = new PostData({
          postID,
          userID,
          title,
          message
        })
        newPostData
        .save()
        .then(() => {
          /* req.flash(
            'success_msg',
            'You are now registered and can log in'
        ) */
        console.log('Post submitted successfully...');
        res.redirect('/');
          })
          }

  
});

// Login
router.post('/login', (req, res, next) => {
  passport.authenticate('local', {
    successRedirect: '/dashboard',
    failureRedirect: '/login',
    failureFlash: true
  })(req, res, next);
});

// Logout
router.get('/logout', (req, res) => {
  req.logout();
  req.flash('success_msg', 'You are logged out');
  res.redirect('/login');
});

const PORT = process.env.PORT || 5000;

app.listen(PORT, console.log(`Server running on  ${PORT}`));
