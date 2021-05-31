import React from 'react'
import SearchPage from '../pages/search-page'
import AboutPage from '../pages/about-page'

export function changePage(){}

export function getCurrentPage(){}

class Content extends React.Component {
    constructor(props){
        super(props)
        this.state = {pageId:'search'}
        changePage = this.setState.bind(this)
        getCurrentPage = this.getCurrentPage.bind(this)
    }   

    getCurrentPage(){
        return this.state.pageId
    }

    render(){
        switch(this.state.pageId){
            case 'search': 
                return  <SearchPage     onChangeSearch={this.handleChange_Search} 
                                        onChangeSettings={this.handleChange_Settings} 
                                        onClickSettings={this.handleClick_Settings}>
                        </SearchPage>
            default: return null
        }
    }
}

export default Content; 