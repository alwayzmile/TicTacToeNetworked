# TicTacToeNetworked
Web based two player networked tic tac toe. The game server is in java. It can still be played without connecting to the game server as an additional feature.

##Content:
1. IkhsanTicTacToeServer is netbeans java project folder for tic tac toe game server.
2. IkhsanTicTacToeClient is netbeans java project folder for tic tac toe game client. Every request made from the game web page would be sent to this client jar file as its arguments. Later this game client will send the request to game server. After completing the request and getting a response, print it out and the response will be read by the game.
3. tic-tac-toe is the web project folder written in php and javascript.

##How to run:
(Using 1 computer)
1. Run IkhsanTicTacToeServer.
2. Run game homepage in browser. One tab/window for a player and another for another player.
(Using 2 computer connected together by ad-hoc network)
1. Run IkhsanTicTacToeServer.
2. Run the game homepage in browser from one of the computer in the network. Use ip address of the computer server as its host address.
3. Do step 2 for another player.

##Credits:
1. [tushar bandal](http://codepen.io/tusharbandal/pen/mdujc/) for the game homepage interface.
2. [Ray Toal](http://cs.lmu.edu/~ray/notes/javanetexamples/) for the learning and idea in this network socket programming project.
