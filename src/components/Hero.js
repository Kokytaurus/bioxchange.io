import React from 'react';
import scrollToElement from 'scroll-to-element';

import ExchangeWidget from '../containers/ExchangeWidget';
import CoinPrices from '../containers/CoinPrices';
import ErrorAlert from '../components/ErrorAlert';


const Hero = () => (
	<div id="hero">
		<ErrorAlert />


		<div className="container">
			<div className="row">
				<div className="col-md-12">
				<div className="col-md-6">
					<div className="brand">
				        <h1>Cryptocurrency  </h1>
				        <h1>Exchange Platform</h1>
				        <h2>Simple. <span className="text-green">Secure</span>. Transparent.</h2>
					</div>
				</div>

				<div className="row">
				
				<div className="col-md-6">
				<div className="brand">
				    <a href="crypt" target="_blank" ><button class="btn btn-blocked btn-themed proceed"><h2>Place Ads to sell or buy Cryptocurrencies</h2></button></a>
					</div>			
				</div>
				
				</div>

				<ExchangeWidget />
				<CoinPrices />
				</div>
			</div>
		</div>

		


		<div id="mouse-scroll" onClick={() => scrollToElement('#about')}>
			<span className="arrow-1" aria-hidden="true"></span>
			<span className="arrow-2" aria-hidden="true"></span>
			<span className="arrow-3" aria-hidden="true"></span>
		</div>
	</div>

					
		
				
);

export default Hero;
