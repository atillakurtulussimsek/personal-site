const express = require('express');
const router = express.Router();

router.get('/', async function(req,res){
    return res.render('index');
});

module.exports = router;