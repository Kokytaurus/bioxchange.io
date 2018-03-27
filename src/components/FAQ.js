import React, { Component } from 'react';
import { Link } from 'react-router-dom';
import { Modal } from 'react-bootstrap';
import QuestionAnswer from './QuestionAnswer'

class FAQ extends Component {
  constructor(props) {
    super(props);

    this.state = {
      show: false
    }
  }

  componentDidUpdate() {
    if (this.state.show != this.props.show) {
      this.setState({
        show: this.props.show
      });
    }
  }

  render() {
    return (
      <Modal show={this.state.show} onHide={this.props.onClose} >
        <div id="faq" className="modal-content">
          <div className="modal-header">
            <button type="button" className="close" data-dismiss="modal" aria-hidden="true" onClick={this.props.onClose}>
              <i className="material-icons">clear</i>
            </button>
          </div>

          <div className="modal-body">
            <QuestionAnswer
              question="Who are you?"
              answer={
                <div>
                  <p>BioXchange is an automated cryptocurrency exchange service, operated by <a href="https://biosec.com.ng/" target="_blank">(registered company No. -------)</a>.</p>
                  <p><br/>Our registered office address - 15 Mekong Crescent, Maitama, Abuja</p>
                  <p>Our customer support phone number in NG is <a href="tel:-----------">-----------</a>.</p>
                </div>
              }/>

            <QuestionAnswer
              question="What bioxchange does?"
              answer={
                <div>
                  <p>We allow you to exchange one cryptocurrency for another. To view our currently supported coins, please click on the coin selection widget in the top of fold of the page.</p>
                  <p>We will be adding more currencies very soon, stay tuned!</p>
                  <p>Missing your favorite coin? Let us know here: <a href="mailto:support@bioxchange.com">support@bixchange.com</a>.</p>
                </div>
              }/>

            <QuestionAnswer
              question="What is your fee?"
              answer={
                <p>Our service fee is 0.2%. There are no hidden fees here: the amount you see on the screen is the exact amount you get in your wallet.</p>
              }/>  

            <QuestionAnswer
              question="How long does the exchange process take?"
              answer={
                <p>Initiating a transaction doesn’t take more than a couple of minutes. The actual processing takes about 10–60 minutes before you receive your coins in your desired currency. The transaction time depends on the selected currencies and their respective blockchains.</p>
              }/> 

          
            <QuestionAnswer
              question="Do I need a wallet? How do I get one?"
              answer={
                <div>
                  <p>In order to use BioXchange, you need to have your own wallet. The main upside of this feature is that we don’t hold your coins, and thus you retain full control over your assets at all times.</p>
                  <p>If you need some help obtaining a wallet for your desired cryptocurrency, please look here:</p>
                  <ul>
                    <li>Bitcoin (BTC): <a href="https://bitcoin.org/en/choose-your-wallet">https://bitcoin.org/en/choose-your-wallet</a></li>
                    <li>Ethereum (ETH): <a href="https://github.com/ethereum/mist/releases">https://github.com/ethereum/mist/releases</a></li>
                    <li>Litecoin (LTC): <a href="https://litecoin.org/">https://litecoin.org/</a></li>
                  </ul>

                  <p>Please note that we are not affiliated with the websites mentioned above, these links are for user’s reference purposes only. We will not accept any liability, obligation or responsibility whatsoever for the content of external websites.</p>
                </div>
              }/>
          </div>
        </div>
      </Modal>
    );
  }
}

export default FAQ;
