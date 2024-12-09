<!-- <footer class="bg-purple-700 py-12 text-white font-extrabold text-center"> -->
<footer class="bg-purple-700 py-12 text-white font-extrabold text-center">
  <h4>&reg; 2024, SINROD GRAPHIC DESIGNER</h4>
  <h5>Powered by <a class="underline">SANREYNO</a></h5>
</footer>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="assets/lightbox/js/lightbox.js"></script>
    <script src="https://kit.fontawesome.com/f0dad9217a.js" crossorigin="anonymous"></script>
  <script>
  //GO TO TOP
  var toTopButton = document.getElementById("to-top-button");

  // When the user scrolls down 200px from the top of the document, show the button
  window.onscroll = function () {
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
      toTopButton.classList.remove("hidden");
    } else {
      toTopButton.classList.add("hidden");
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  // function goToTop() {
  // }
  document.getElementById('to-top-button').addEventListener('click', function() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
  </script>

</body>
</html>