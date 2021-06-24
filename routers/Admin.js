const express = require('express');
const router = express.Router();
const Config = require('../Config');

router.all('*', async function(req,res){
    if(req.session.isAdminLogin == false) return res.redirect('/auth/login');
}) 

module.exports = router;