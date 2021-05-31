import React from 'react'
import region from '../../data/region-data'

class AboutPage extends React.Component {
    constructor(props){
        super(props)
    }

    render(){
        return  <main className="content-ha-center">
                    <div id="content" className="content content-ha-center">
                        {region.sections?.map(section => {
                            return  <div className="section">
                                        <h3 className="title">{section.title}</h3>
                                        <p className="description">{section.description}</p>
                                    </div>
                        })}
                        <h5 className="source">Источник: <a href={region.data_source_url} target="_blank">{region.data_source}</a></h5>
                    </div>
                </main>
    }
}

export default AboutPage;