<!-- <footer class="bg-purple-700 py-12 text-white font-extrabold text-center"> -->
<footer class="bg-purple-700 py-12 text-white font-extrabold text-center">
  <h4>&reg; 2024, SINROD GRAPHIC DESIGNER</h4>
  <h5>Powered by <a class="underline">SANREYNO</a></h5>
</footer>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/f0dad9217a.js" crossorigin="anonymous"></script>
  <script>
  //GO TO TOP
  var toTopButton = document.getElementById("to-top-button");
  var socialmedia = document.getElementById("socialmedia");

  // When the user scrolls down 200px from the top of the document, show the button
  window.onscroll = function () {
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
      // toTopButton.classList.remove("hidden");
      toTopButton.classList.remove("translate-x-20");
      socialmedia.classList.remove("translate-y-20");
    } else {
      toTopButton.classList.add("translate-x-20");
      socialmedia.classList.add("translate-y-20");
      // toTopButton.classList.add("hidden");
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  // function goToTop() {
  // }
  document.getElementById('to-top-button').addEventListener('click', function() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
  </script>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    const header = document.getElementById("header");
    let lastScroll = 0;

    window.addEventListener("scroll", () => {
      const currentScroll = window.pageYOffset;
      
      if (currentScroll > lastScroll && currentScroll > 50) {
        // Usuario está haciendo scroll hacia abajo: oculta el header
        header.classList.add("-translate-y-full");
      } else if (currentScroll < lastScroll) {
        // Usuario está haciendo scroll hacia arriba: muestra el header
        header.classList.remove("-translate-y-full");
      }

      lastScroll = currentScroll;
    });
  });
</script>

<!-- LIGHTBOSS -->
<div id="modal"
    class="hidden fixed top-0 left-0 z-20 w-screen h-screen bg-black/70 flex justify-center items-center">
    <!-- The close button -->
    <a class="fixed z-20 top-6 right-8 text-white text-5xl font-bold" href="javascript:void(0)"
        onclick="closeModal()">&times;</a>
    <!-- A big image will be displayed here -->
    <img id="modal-img" class="max-w-full w-full max-h-full object-cover px-24" />
</div>
<script>
    // Get the modal by id
    var modal = document.getElementById("modal");
    // Get the modal image tag
    var modalImg = document.getElementById("modal-img");
    // this function is called when a small image is clicked
    function showModal(src) {
        modal.classList.remove('hidden');
        modalImg.src = src;
    }
    // this function is called when the close button is clicked
    function closeModal() {
        modal.classList.add('hidden');
    }
</script>

</body>
</html>