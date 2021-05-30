import clouds from '../../assets/img/clouds.svg'
import Menu from '../elements/menu';

const Header = (props) => {
    return  <header className="content-ha-center">
                <div className="content">
                    <div className="row content-ha-right">
                        <img src={clouds}/>
                    </div>
                    <div className="sticky-block">
                        <h1 className="title">приморский край</h1>
                        <Menu inputRef={props.inputRef}></Menu>
                    </div>
                </div>
            </header>
};

export default Header;