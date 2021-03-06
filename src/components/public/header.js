import clouds from '../../assets/img/clouds.svg'
import Menu from '../elements/menu';

const Header = () => {
    return  <header className="content-ha-center">
                <div className="content">
                    <div className="row content-ha-right">
                        <img src={clouds}/>
                    </div>
                    <div className="sticky-block">
                        <h1 className="title">приморский край</h1>
                        <Menu></Menu>
                    </div>
                </div>
            </header>
};

export default Header;