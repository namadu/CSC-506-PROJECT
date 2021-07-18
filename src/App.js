import './App.css';
import {BrowserRouter, Switch, Route} from 'react-router-dom'
import Home from './components/Pages/Home'
import Dashboard from './components/Pages/Dashboard'
import Login from './components/Pages/Login'
import SignUp from './components/Pages/SignUp'
import Profile from './components/Pages/Profile'

import Navbar from './components/Layouts/Navbar'
import Footer from './components/Layouts/Footer'

function App() {
  return (
    <>
    <BrowserRouter>
    <Navbar/>
    <Switch>
      <Route component={Home} path='/' exact/>
      <Route component={Dashboard} path='/dashboard'/>
      <Route component={Login} path='/login' />
      <Route component={SignUp} path='/signup' />
      <Route component={Profile} path='/profile' />

      
    </Switch>
    
    <Footer/>
    
    </BrowserRouter>
    
    </>
  );
}

export default App;
