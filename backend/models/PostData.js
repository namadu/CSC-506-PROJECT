const mongoose = require('mongoose');

const PostData = new mongoose.Schema({
  postID: {
    type: String,
    required: true
  },
  userID: {
    type: String,
    required: true
  },
  title: {
    type: String,
    required: true
  },
  message: {
    type: String,
    required: true
  }
});

const PostData = mongoose.model('PostData', PostDataSchema);

module.exports = PostData;
