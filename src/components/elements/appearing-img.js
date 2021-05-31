import $ from 'jquery'
import React from 'react'
import ReactDOM from 'react-dom'

class Img extends React.Component{
    constructor(props){
        super(props)
        this.state={classes:'bird hidden'}
        this.ref = React.createRef()
    }

    handleScroll = () => {
        let windowTop = $(window).scrollTop()
        let windowHeight = $(window).height()
        let elemTop = $('#'+this.props.id).offset().top
        let elemHeight = $('#'+this.props.id).outerHeight()
    
        if(windowTop + windowHeight >= elemTop && windowTop + windowHeight - elemHeight * 2 <= elemTop + windowHeight - elemHeight){
            this.setState({classes:'bird visible'})
        } else {
            this.setState({classes:'bird hidden'})
        }

        this.forceUpdate()
    }

    componentDidMount(){
        window.addEventListener('scroll', this.handleScroll, true)
    }
    componentWillUnmount(){}

    render(){
        return <img src={this.props.src} ref={this.ref} id={this.props.id} className={this.state.classes}/>
    }
}

export default Img;