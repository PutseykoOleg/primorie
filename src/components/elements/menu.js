import $ from 'jquery'
import React from 'react'
import ReactDOM from 'react-dom'

class Menu extends React.Component{
    constructor(props){
        super(props)
        this.ref = React.createRef()
        this.handleScroll = this.handleScroll.bind(this)
        this.handleClick_AboutBtn = this.handleClick_AboutBtn.bind(this)
        this.handleClick_AdvBtn = this.handleClick_AdvBtn.bind(this)
    }

    handleScroll = () => {
        // let windowTop = $(window).scrollTop()
        // let windowHeight = $(window).height()
        // let elemTop = $('#search-input').offset().top
        // let elemHeight = $('#search-input').outerHeight()
    
        // if(windowTop + windowHeight >= elemTop && windowTop + windowHeight - elemHeight * 2 <= elemTop + windowHeight - elemHeight){
        //     ReactDOM.findDOMNode(this).classList.remove('hidden')
        //     ReactDOM.findDOMNode(this).classList.add('visible')
        // } else {
        //     ReactDOM.findDOMNode(this).classList.remove('visible')
        //     ReactDOM.findDOMNode(this).classList.add('hidden')
        // }

        // this.forceUpdate()
    }

    handleClick_AboutBtn = () => {
        if(this.ref.current.classList.contains('visible')){
            let buttons = this.ref.current.getElementsByClassName('menu-point')
    
            for(let i = 0; i < buttons.length; i++){
                if(buttons[i].id === "about-btn"){
                    buttons[i].classList.add('choosed')
                } else {
                    buttons[i].classList.remove('choosed')
                }
            }
        }
    }

    handleClick_AdvBtn = () => {
        if(this.ref.current.classList.contains('visible')){
            let buttons = this.ref.current.getElementsByClassName('menu-point')
    
            for(let i = 0; i < buttons.length; i++){
                if(buttons[i].id === "adv-btn"){
                    buttons[i].classList.add('choosed')
                } else {
                    buttons[i].classList.remove('choosed')
                }
            }
        }
    }

    componentDidMount(){
        window.addEventListener('scroll', this.handleScroll, true)
    }
    componentWillUnmount(){
        window.removeEventListener('scroll', this.handleScroll)
    }

    render(){
        return  <nav ref={this.ref} className="menu row content-ha-center hidden">
                    <div className="menu-point" id="about-btn" onClick={this.handleClick_AboutBtn}><b>о крае</b></div>
                    <div className="menu-point choosed" id="adv-btn" onClick={this.handleClick_AdvBtn}><b>места</b></div>
                </nav>
    }
}

export default Menu;