new Chart(document.getElementById("pie-chart"), {
    type: 'pie',
    data: {
      labels: ["Àfrica", "Asia", "Amèrica"],
      datasets: [{
        label: "Population (millions)",
        backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f"],
        data: [150,300,50]
      }]
    },
    options: {
      title: {
        display: true,
        text: 'Predicted world population (millions) in 2050'
      }
    }
});
 const icon = document.getElementById('icon-detalls');
  icon.addEventListener('click', () => {
    icon.classList.toggle('active');
  });
   const cucToggle = document.getElementById('cucToggle');
  const cucCard = document.getElementById('cucCard');

  cucToggle.addEventListener('click', (e) => {
    e.preventDefault(); // Evita que se siga el enlace
    cucCard.classList.toggle('d-none');
  });

  // Opcional: ocultar si se hace clic fuera
  document.addEventListener('click', (e) => {
    if (!cucToggle.contains(e.target) && !cucCard.contains(e.target)) {
      cucCard.classList.add('d-none');
    }
  });
