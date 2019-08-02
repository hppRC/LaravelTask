import React from 'react'
import {Link} from 'react-router-dom'

const Footer = () => (
    <nav>
        <li><Link to='/'>home</Link></li>
        <li><Link to='/products'>products</Link></li>
        <li><Link to='/shops'>shops</Link></li>
    </nav>
)

export default Footer