// Exemplo com Node.js e Express
const express = require('express');
const bodyParser = require('body-parser');
const mysql = require('mysql');

const app = express();
const port = 3000;

// Configuração do MySQL
const connection = mysql.createConnection({
    host: 'LOBODELL\SQLEXPRESS',
    user: 'Lobinho',
    password: 'Senha123$',
    database: 'Locadora'
});

// Conectar ao MySQL
connection.connect((err) => {
    if (err) {
        console.error('Erro ao conectar ao banco de dados: ', err);
        return;
    }
    console.log('Conexão com banco de dados MySQL estabelecida');
});

// Rota para inserir dados
app.post('/inserir', (req, res) => {
    const { nome, email } = req.body;
    const sql = `INSERT INTO Locadora (Titulo, Genero) VALUES (?, ?)`;
    connection.query(sql, [Titulo, Genero], (err, result) => {
        if (err) {
            console.error('Erro ao inserir dados: ', err);
            res.status(500).send('Erro ao inserir dados');
            return;
        }
        console.log('Dados inseridos com sucesso');
        res.send('Dados inseridos com sucesso');
    });
});

app.listen(port, () => {
    console.log(`Servidor está rodando na porta ${port}`);
});
