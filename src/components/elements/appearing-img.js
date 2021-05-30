import $ from 'jquery'
import React from 'react'
import ReactDOM from 'react-dom'

class Img extends React.Component{
    constructor(props){
        super(props)
        this.ref = React.createRef()
    }

    handleScroll = () => {
        // let windowTop = $(window).scrollTop()
        // let windowHeight = $(window).height()
        // let elemTop = $('#'+this.props.id).offset().top
        // let elemHeight = $('#'+this.props.id).outerHeight()
    
        // if(windowTop + windowHeight >= elemTop && windowTop + windowHeight - elemHeight * 2 <= elemTop + windowHeight - elemHeight){
        //     ReactDOM.findDOMNode(this).classList.remove('hidden')
        //     ReactDOM.findDOMNode(this).classList.add('visible')
        // } else {
        //     ReactDOM.findDOMNode(this).classList.remove('visible')
        //     ReactDOM.findDOMNode(this).classList.add('hidden')
        // }

        // this.forceUpdate()
    }

    componentDidMount(){
        window.addEventListener('scroll', this.handleScroll, true)
    }
    componentWillUnmount(){}

    render(){
        return <img src={this.props.src} ref={this.ref} id={this.props.id} className="bird"/>
    }
}

export default Img;