# BitcoinDice
BitcoinDice is a popular Bitcoin Dice game, BitcoinDice is free to use and distribute.

## Pre-Requisites

- Linux
- Apache2
- PHP
- MySQL
- bitcoind

## Installation

### bitcoind

1. Install bitcoind
2. Edit your bitcoin.conf in ~/.bitcoin/bitcoin.conf (you may need to create this) to look like the following, You will need to change the username and pass.

```
server=1
rpcuser=bitcoinrpc
rpcpassword=dfbufbSUBUSbf7763YSFYbfybsiyb87
rpcport=8332
```

3. run bitcoind -daemon
4. let it fully sync to the network before moving on to the next part (or the script will not work)

### BitcoinDice

1. `composer install`
2. Change to the inc/ directory and change the permissions to 777 (chmod 777 *)
3. Run the script from your prefered web browser and follow the installation instructions on screen
4. Once completed remove the install directory for security reasons
5. You now have access to http://your-server/dice/admin (or wherever you put the dice script)
6. Finally, Deposit your funds using the receiving address on the wallet tab in the admin menu (Depositing your funds to another address will not work and will not show as available casino funds)

Good Luck and have fun running your own casino!
