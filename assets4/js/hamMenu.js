
  // Select the hamburger menu and off-screen menu
  const hamMenu = document.querySelector('.ham-menu');
  const offScreenMenu = document.querySelector('.off-screen-menu');
  const headerSection = document.querySelector('.xis-it-header-section');

  let closeTimeout = null;

  // Add click event to toggle the menu
  // hamMenu.addEventListener('click', () => {
  //   hamMenu.classList.toggle('active');
  //   offScreenMenu.classList.toggle('active');
  // });

  // Add click event to toggle the menu
  hamMenu.addEventListener('click', () => {
    hamMenu.classList.toggle('active');
    offScreenMenu.classList.toggle('active');

    // If menu opened, start monitoring mouse position
    if (offScreenMenu.classList.contains('active')) {
      startInactivityTimer();
    } else {
      clearTimeout(closeTimeout);
    }
  });

  // Function to start the inactivity timer (e.g., 5 seconds)
  function startInactivityTimer() {
    clearTimeout(closeTimeout);
    closeTimeout = setTimeout(() => {
      const isOverMenu = offScreenMenu.matches(':hover') || hamMenu.matches(':hover');
      if (!isOverMenu) {
        hamMenu.classList.remove('active');
        offScreenMenu.classList.remove('active');
      }
    }, 5000); // 5000ms = 5 seconds
  }

  // Restart timer if mouse enters again
  offScreenMenu.addEventListener('mouseenter', () => {
    clearTimeout(closeTimeout);
  });

  offScreenMenu.addEventListener('mouseleave', () => {
    startInactivityTimer();
  });


  // Close the menu when the mouse leaves the navbar or the off-screen menu
  // headerSection.addEventListener('mouseleave', () => {
  //   hamMenu.classList.remove('active');
  //   offScreenMenu.classList.remove('active');
  // });

  // offScreenMenu.addEventListener('mouseleave', () => {
  //   hamMenu.classList.remove('active');
  //   offScreenMenu.classList.remove('active');
  // });

