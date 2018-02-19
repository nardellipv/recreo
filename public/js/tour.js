(function(){
	var name = "Friend";
	var tour = new Tour({
		storage : false
	});

	tour.addSteps([
	  {
	    element: ".tour-step.1",
	    placement: "bottom",
	    title: function(){ return "Tour Olimpiadas de ciencia "  },
	    content: "Menú principal de la aplicación"
	  },
	  {
	    element: ".tour-step.2",
	    placement: "top",
	    backdrop: true,
	    title: "Panel Principal",
	    content: "Realizando un click acá usted volvera desde cualquier lugar a la sección principal de la aplicación."
	  },
	  {
	    element: ".tour-step.3",
	    placement: "top",
	    backdrop: true,
	    title: "Inscripciones",
	    content: "Dentro de este menú se encontrará con los submenú para la inscripción de alumnos y docentes"
	  },
	  {
	    element: ".tour-step.4",
	    placement: "top",
	    backdrop: true,
	    title: "Listado",
	    content: "Dentro de este menú se encuentran los submenú para ver los listados de alumnos y docentes que se registraron en el colegio."
	  },
	  {
	    element: ".tour-step.5",
	    placement: "top",
	    backdrop: true,
	    title: "Perfil del colegio",
	    content: "En el menú del perfil usted verá y podrá modificar los datos del colegio previamente ingresados."
	  },
	  {
	    element: ".tour-step.6",
	    placement: "top",
	    backdrop: true,
	    title: "Preguntas frecuentes",
	    content: "Se verá un listado de preguntas frecuentes y ayuda al usuario para la utilización de la plataforma."
	  },
	  {
	    element: ".tour-step.7",
	    placement: "top",
	    backdrop: true,
	    title: "Tarjetas inscriptos",
	    content: "Se muestra la cantidad de inscriptos en la plataforma."
	  },
	  {
	    element: ".tour-step.8",
	    placement: "top",
	    backdrop: true,
	    title: "Información y descargas",
	    content: "A medida que vayan habiendo información y/o descargas importantes se iran mostrando dentro de esta área."
	  },
	]);

	// Initialize the tour
	tour.init();

	// Start the tour
	tour.start();

}());