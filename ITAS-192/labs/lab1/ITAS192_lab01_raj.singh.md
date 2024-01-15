# ITAS192 Lab 01 - Raj Singh

## Part 1 Variables
1. 
    1. **Declare two variables: admin and name.**
        - let admin, name;

    2. **Assign the value "John" to name.**
        - name = "John";

    3. **Copy the value from name to admin.**
        - admin = name;

    4. **Show the value of admin using alert (must output "John").**
        - alert(admin);
        `Alerts: "John" in the browser using admin value`


2. 
    1. **Create a variable with the name of our planet.**
        - let planetName;
    2. **Create a variable to store the name of a current visitor.**
        - let currentVisitor;

3. 
    1. **Right case for birthday**
        - Upper case `const BIRTHDAY = '12.31.1969';`
        > This is because the birthday never changes. And so, const is more appropriate. Convention for using const is upper case variable names.
        
        2. **Right case for age**
        - lower case or camel case `let age = someCode(BIRTHDAY)`;
        > This is because age keeps on incrementing every year.

4. 
    1. ``alert(\`hello \${1}\`);``
        - "hello 1"
    2. ``alert(\`hello \${"name"}\`);``
        - "hello name"
    3. ``alert(\`hello \${name}\`);``
        - "hello Brandon"

5. 
```<!DOCTYPE html>
<html>
<head>
    <title>Simple prompt to output page</title>
</head>
<body>
    <script>
        const name = prompt("Please enter your name");
        alert("Hello " + name);
    </script>
</body>
</html>
```

---

## Part 2 Logic Flow

1. 
    **Will alert be executed in this code block?**
    `if ("0") {alert('Hello');}`
    - Since "0" is actually a string and not a numeric 0, the alert will be executed. "0" is a truthy value in this case.

2. 
```
let answer = prompt('What is the "official" name of JavaScript?');

if (answer === "ECMAScript") {
  alert("Right!");
  return;
}

alert("You don't know? ECMAScript!"); // not using else for better code quality if used in a function
```

3. 
```
let numberValue = prompt("Enter a number");

if (numberValue > 0) {
  alert("1");
} else if (numberValue < 0) {
  alert("-1");
} else {
  alert("0");
}
```

4. **Writing the if statement as a ternary expression**
`
let result = (a + b < 4) ? 'Below' : 'Over';
`

5. **Using multiple ternary operators**
```
let message =
login === 'Employee' ? 'Hello' :
login === 'Director' ? 'Greetings':
login === '' ? 'No login' : '' ;
```

6. **Output of each line**
    1. `alert(null || 2 || undefined);`
       - This will show `2`.
    
    2. `alert(alert(1) || 2 || alert(3));`
       - This will alerts `1`. After that, it will alert `2`.
    
    3. `alert(1 && null && 2);`
       - This will show `null` as that is the first falsy value in this sequence.
    
    4. `alert(alert(1) && alert(2));`
       - This will show `undefined` because alert(1) returns undefined and that is the first falsy value in this sequence.
    
    5. `alert(null || 2 && 3 || 4);`
       - `2 && 3` is evaluated first, leaving us with `null || 3 || 4`. `null` is falsy and the first truthy value becomes 3. Our final output is 3.
     
7. **Write an "if" condition to check that age is between 14 and 90 inclusively.**

```
let result = (age >= 14 && age <= 90) ? 'Age between 14 and 90' : 'Too young or too old for this';
```

8. 

- Using not operator
```
let age = 28; 
if (!(age >= 14 && age <= 90)) {
    console.log("Age is not between 14 and 90 inclusively.");
} else {
    console.log("Age is between 14 and 90 inclusively.");
}

```
- Simpler approach (without using ! operator)
```
let age = 28;  // Replace with the actual age
if (age < 14 || age > 90) {
    console.log("Age is not between 14 and 90.");
} else {
    console.log("Age is between 14 and 90.");
}
```

9. **Truth or Falsy?**

- `if (-1 || 0) alert('first');`
    - Will execute
- `if (-1 && 0) alert('second');`
    - Will fail as (-1 && 0) is falsy
- `if (null || -1 && 1) alert('third');`
    - Will execute as (-1 && 1) is truthy

10. **Authentication code using nestd if blocks.**

```
let userName = prompt("Who's there?");

if (userName === "Admin") {
    let password = prompt("What is the password?");

    if (password === null || password === "") {
        alert("Canceled");
    } else if (password === "TheMaster") {
        alert("Welcome!");
    } else {
        alert("Wrong password");
    }
} else if (userName === null || userName === "") {
    alert("Canceled");
} else {
    alert("I don't know you");
}
```

---

## Part 3 Loops

1.
The last value alerted is 1. The while loop counts down from 3 to 1, and it stops because reaching i reaches 0 and the condition is no longer true


2.
- The prefix form ++i, alerts 1 to 4.
- The postfix form i++, alerts 1 to 5.

3.
- Postfix form (i++): 0, 1, 2, 3, 4.
- Prefix form (++i): 1, 2, 3, 4

4.
```
for (let _ = 2; _ <= 10; _ += 2) {
    console.log(_);
}
```

5.
```
let _ = 0;
while (_ < 3) {
  alert(`number ${_}!`);
  _++;
}
```

6.

```
let input;

while (true) {
    input = prompt("Enter a number greater than 100:");

    // Handle canceled or empty input
    if (input === null || input === "") {
        alert("Canceled or input is empty.");
        break;
    }

    // Unary expression to convert number
    input = +input;
    
    if (input > 100) {
        alert("You entered a number greater than 100!");
        break;
    } else {
        alert("Please enter a number greater than 100.");
    }
}
```

7.

```
let browser = prompt("Enter your browser:");

if (browser === "Edge") {
    alert("You've got Edge!");
} else if (browser === "Chrome" || browser === "Firefox" || browser === "Safari" || browser === "Opera") {
    alert('Okay, we support these browsers too');
} else {
    alert('We hope that this page looks ok!');
}
```

8.

```
let a = +prompt('a?', '');

switch (a) {
    case 0:
        alert(0);
        break;
    
    case 1:
        alert(1);
        break;
    
    case 2:
    case 3:
        alert('2,3');
        break;
    
    default:
        alert('Not 0 - 3 inclusively'))
        break;
}
```
9.

```
let a = +prompt('a?', '');

switch (a) {
    case 0:
        alert(0);
        break;
    
    case 1:
        alert(1);
        break;
    
    case 2:
    case 3:
        alert('2,3');
        break;
    
    default:
        alert('Not 0 - 3 inclusively')
        break;
}

```