const choises = ["Rock", "Paper", "Scissor"];
const playerChoiseDisplay = document.getElementById("playerChoisesDisplay");
const computerChoiseDisplay = document.getElementById("computerChoisesDisplay");
const resultDisplay = document.getElementById("resultDisplay");

function playerChoises(game) {
	const computerChoise = choises[Math.floor(Math.random() * 3)];
	let result = "";
	if (game === computerChoise) {
		result = "It's a Tie!";
	}
	else {
		switch (game) {
			case "Rock": result = (computerChoise === "Scissor") ? "You Win" : "You Lose";
				break;
			case "Paper": result = (computerChoise === "Rock") ? "You Win" : "You Lose";
				break;
			case "Scissor": result = (computerChoise === "Paper") ? "You Win" : "You Lose";
				break;
		}
	}
	playerChoiseDisplay.textContent = `Player:${game}`;
	computerChoiseDisplay.textContent = `Computer:${computerChoise}`;
	resultDisplay.textContent = `Result:${result}`;
}