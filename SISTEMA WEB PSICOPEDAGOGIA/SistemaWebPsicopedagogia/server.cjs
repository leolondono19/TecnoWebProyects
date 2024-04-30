const express = require('express');
const bodyParser = require('body-parser');
const cors = require('cors');
const mysql = require('mysql'); // Importar el módulo mysql

const app = express();
const PORT = process.env.PORT || 7000;

app.use(cors());
app.use(bodyParser.json());

// Configuración de la conexión a MySQL
const connection = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: '1234',
  database: 'proyecto_tecnoweb'
});

// Conectar a la base de datos MySQL
connection.connect((err) => {
  if (err) {
    console.error('Error al conectar a la base de datos:', err);
    return;
  }
  console.log('Conexión a la base de datos MySQL establecida');
});

// Ruta de ejemplo para obtener datos de la base de datos
app.get('/api/data', (req, res) => {
  // Consulta SQL de ejemplo
  const query = 'SELECT * FROM tabla_ejemplo';

  // Ejecutar la consulta
  connection.query(query, (error, results, fields) => {
    if (error) {
      console.error('Error al ejecutar la consulta:', error);
      res.status(500).json({ error: 'Error al ejecutar la consulta' });
      return;
    }
    // Enviar los resultados como respuesta
    res.json(results);
  });
});

app.listen(PORT, () => {
  console.log(`Servidor Express escuchando en el puerto ${PORT}`);
});
