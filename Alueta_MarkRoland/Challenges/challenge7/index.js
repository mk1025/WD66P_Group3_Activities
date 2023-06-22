function startCalculator() {
  let input = confirm("Do you want to start the calculator?");
  if (input === true) {
    calculator();
  }
}

function calculator() {
  let input = parseInt(
    prompt(
      "Choose an Operation: \n [1] Addition \n [2] Subtraction \n [3] Multiplication \n [4] Division \n"
    )
  );

  if (isNaN(input)) {
    alert("Invalid Input!");
    return;
  }

  let num_1 = prompt("Enter the first number: ");
  let num_2 = prompt("Enter the second number: ");

  switch (input) {
    case 1:
      alert(
        "The result of the Addition is: " + (Number(num_1) + Number(num_2))
      );
      break;
    case 2:
      alert(
        "The result of the Subtraction is: " + (Number(num_1) - Number(num_2))
      );
      break;
    case 3:
      alert(
        "The result of the Multiplication is: " + Number(num_1) * Number(num_2)
      );
      break;
    case 4:
      alert("The result of the Division is: " + Number(num_1) / Number(num_2));
      break;
    default:
      alert("Invalid Input!");
      return;
  }
}
