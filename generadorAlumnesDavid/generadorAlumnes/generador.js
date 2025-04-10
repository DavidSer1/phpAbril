const fs = require('fs');
const pdf = require('html-pdf');

// Llegeix la plantilla HTML
let plantilla = fs.readFileSync('./PlantillaContrat.html', 'utf8');

// Llegir el CSV y separar les línees
let lineas = fs.readFileSync('basedadesContrats.csv', 'utf8').split(/\r?\n/);
const cabeceras = lineas[0].split(';').map(c => c.trim());


lineas.slice(1).forEach((linea, idx) => {
  if (!linea.trim()) return; 
  
  const valores = linea.split(';').map(valor => valor.trim());
  
  let plantillaProcesada = plantilla;
  
  cabeceras.forEach((campo, i) => {
    const regex = new RegExp(`#${campo}`, 'g');
    plantillaProcesada = plantillaProcesada.replace(regex, valores[i]);
  });
  
  // Genera el PDF a partir de la plantilla procesada
  pdf.create(plantillaProcesada).toFile(`pdfambdatosdavid${idx}.pdf`, function(err, res) {
    if (err) return console.error(err);
    console.log(`PDF generado: ${res.filename}`);
  });
});
