
  // Select the hamburger menu and off-screen menu
  const hamMenu = document.querySelector('.ham-menu');
  const offScreenMenu = document.querySelector('.off-screen-menu');
  const headerSection = document.querySelector('.xis-it-header-section');

  // Add click event to toggle the menu
  hamMenu.addEventListener('click', () => {
    hamMenu.classList.toggle('active');
    offScreenMenu.classList.toggle('active');
  });

  // Close the menu when the mouse leaves the navbar or the off-screen menu
  headerSection.addEventListener('mouseleave', () => {
    hamMenu.classList.remove('active');
    offScreenMenu.classList.remove('active');
  });

  offScreenMenu.addEventListener('mouseleave', () => {
    hamMenu.classList.remove('active');
    offScreenMenu.classList.remove('active');
  });

