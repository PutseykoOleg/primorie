import React from 'react';
import ReactDOM from 'react-dom';
import Header from './components/public/header.js';
import Content from './components/public/content.js'
import Footer from './components/public/footer.js';
import './assets/css/style.css'

const RootContent = () => {
  let inputRef = React.createRef()
    
  return  <React.StrictMode>
            <Header inputRef={inputRef}/>
            <Content inputRef={inputRef}/>
            <Footer/>
          </React.StrictMode>
}

ReactDOM.render(
  <RootContent></RootContent>,
  document.getElementById('root')
);
