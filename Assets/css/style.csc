* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background: #f4f4f4;
    color: #333;
}

.container {
    width: 700px;
    margin: 40px auto;
    background: white;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

h1 {
    margin-bottom: 20px;
    color: #2c3e50;
}

h2 {
    margin-bottom: 15px;
    color: #555;
}

form {
    display: flex;
    flex-direction: column;
    gap: 12px;
    margin-bottom: 30px;
}

input, select, button {
    padding: 10px;
    font-size: 14px;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 100%;
}

button {
    background: #2c3e50;
    color: white;
    border: none;
    cursor: pointer;
}

button:hover {
    background: #1a252f;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 15px;
}

th, td {
    padding: 10px;
    border: 1px solid #ddd;
    text-align: left;
}

th {
    background: #2c3e50;
    color: white;
}

tr:nth-child(even) {
    background: #f9f9f9;
}

a {
    margin-right: 8px;
    color: #2980b9;
    text-decoration: none;
}

a.supprimer {
    color: #e74c3c;
}

.error {
    color: red;
    font-size: 13px;
}