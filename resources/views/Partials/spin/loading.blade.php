@extends("App")

<!-- Loader overlay -->
<div id="loader" class="fixed inset-0 flex items-center justify-center bg-white z-50">
  <div class="spinner">
    <div class="bounce1"></div>
    <div class="bounce2"></div>
    <div class="bounce3"></div>
  </div>
</div>
<style>
    /* Loader overlay (blanc plein écran) */
#loader {
  background: #ffffff; /* Change la couleur si tu veux */
}

/* Spinner container */
.spinner {
  width: 70px;
  text-align: center;
}

.spinner > div {
  width: 18px;
  height: 18px;
  background-color: #4ade80; /* Vert Tailwind, change si besoin */
  border-radius: 100%;
  display: inline-block;
  animation: sk-bouncedelay 1.4s infinite ease-in-out both;
}

/* Delay pour chaque boule */
.spinner .bounce1 {
  animation-delay: -0.32s;
}

.spinner .bounce2 {
  animation-delay: -0.16s;
}

/* Keyframes pour le rebond */
@keyframes sk-bouncedelay {
  0%, 80%, 100% {
    transform: scale(0);
  }
  40% {
    transform: scale(1.0);
  }
}

</style>

  <script>
    // Attends que la page soit chargée
    window.addEventListener("load", () => {
      // Ajoute un petit délai pour voir le loader (1s)
      setTimeout(() => {
        document.getElementById("loader").style.display = "none";
      }, 30);
    });
  </script>
