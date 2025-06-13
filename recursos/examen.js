document.addEventListener('DOMContentLoaded', () => {
  const toastTrigger = document.getElementById('liveToastBtn');
  const toastLiveExample = document.getElementById('liveToast');

  if (toastTrigger && toastLiveExample) {
    const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);

    toastTrigger.addEventListener('click', () => {
      toastBootstrap.show();

      if (window.innerWidth <= 600) {
        toastTrigger.style.display = 'none';
      }
    });
    toastLiveExample.addEventListener('hidden.bs.toast', () => {
      toastTrigger.style.display = 'block';
    });
  }
});
