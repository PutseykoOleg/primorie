import React from 'react';
import ReactDOM from 'react-dom';
import Header from './components/public/header.js';
import Content from './components/public/content.js'
import Footer from './components/public/footer.js';
import './assets/css/style.css'

ReactDOM.render(
  <React.StrictMode>
    <Header/>
    <Content/>
    <Footer/>
  </React.StrictMode>,
  document.getElementById('root')
);
