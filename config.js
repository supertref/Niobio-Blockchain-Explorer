var api = '/api/?method=';
var blockTargetInterval = 240;
var coinUnits = 1000000000000;
var symbol = 'NBR';
var refreshDelay = 30000;

// pools stats by MainCoins
var networkStat = {
    "nbr": [
		["nbr.4miner.start", "http://api-cryptonote.4miner.me:8118/stats"],
    ]
};
