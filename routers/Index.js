const express = require('express');
const router = express.Router();

router.all('*', async function(req,res,next){
    if(DatabaseStatus == true) return next();

    
});

router.get('/', async function(req,res){
    return res.render('index');
});

module.exports = router;