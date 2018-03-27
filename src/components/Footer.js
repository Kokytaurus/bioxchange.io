import React from 'react';
import { Link } from 'react-router-dom';


const Footer = () => (
	<footer>
		<div className="container">
			<ul>
				<li><Link to="/terms-and-conditions">Terms and Conditions</Link></li>
				<li><Link to="/privacy">Privacy Policy</Link></li>
				{/*<li><Link to="/refund-cancellation">Refund and Cancellation Policy</Link></li>*/}
			</ul>

			<p className="text-muted">All rights reserved, Biosec Solutions<a href="https://biosec.com.ng" target="_blank">VISIT at biosec.com.ng</a></p>
		</div>
	</footer>
);

export default Footer;
