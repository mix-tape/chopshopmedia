<style>

  .preloader {
    position: fixed;
    top: 0;
    left: 0;
    height: 100vh;
    width: 100vw;
    background-color: #000;
    z-index: 500;
  }

    .preloader-mask {
      position: absolute;
      left: calc(50% - 65px);
      top: calc(50% - 10px);
      width: 130px;
      height: 21px;
      overflow: hidden;
    }

    .preloader-image {
      position: absolute;
      display: block;
      width: 260px;
      height: 21px;
      background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIIAAAAVCAMAAAC9vsY0AAAAflBMVEUAAAD////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////vroaSAAAAKnRSTlMABQlgqrGmtYsdFa2inyYRcXdnOhmBSEKQhXw9L5xsWVIhmEyUNioNT0URchP2AAACP0lEQVRIx62VyXrqMAxG/0zNPJUkQJqxQAjv/4LXsuoa300XjhbEEtYhVg5fYIbj4P/4a4c94NPILjnMqGuYkX+beWUNwLV7T+fbaH5f15VRGG9L9J57rTVA1IbfdOmB/f0mJ1HoJ+j43kVTrfPb5QAAXD8Gx+kuMRoxtfTZThqwmLP/Go8AAGX6lNfig0VZ7koTAhBCddwXvl5nvg7UYQ84q9aEQJ80o/nCgCsN6kYdHqtGjXVFqE7+ZOoCnTUA2SYHyOO8tXWlEB5Z0+U5bY48Bajqntb5CYiDp2jNrAGiswGWGvkADCPQV7KbAa/McbKXRDCl6sV6B5yPoQwSYPMdawCQ0DSqUOyLaZ4ssBfQOc6ZKDjZmU4QeCw4OSUKbhqswJo+DwAAWwbgQVaVWp4T6UpEuuEvLrBexKTdBdAE5REAsThHvHEVSymPQCjAtjFC69XRYxddAhI0ot8agDQBvIqm8xD7hTxK4BM9pSIICoHw6QjelfUS62cQ0ygLUsoagNh3gX5BuwON7zr5jzwPCQjLMpSIx49euSNEApIgUVdrAFuMezQBzzRR8kQtObaGJVCGK91wG7FetF7p5vMvPow9AOiuos+j3gJQiEkCEiokEjExQD/Cjs622QPYErbnIp3R8sQEYEQMaMFZZBb7IAD4hV3PgEKcfgEaoQH0d3b5730UQL5v51olLHATNrogEhZcxSCSaDkQANefLzDynQEasZP4Oh557x0JAMq7AwMxxjAiHl2z8KqOAvwDte1By7JKSawAAAAASUVORK5CYII=');
      background-position: center left;
      background-repeat: repeat;
      animation: preloader 2.5s infinite linear;
    }

    @keyframes preloader {
      0% {transform: translateX(-50%); }
      100% {transform: translateX(0%); }
    }

</style>

<div class="preloader">
  <div class="preloader-mask">
    <span class="preloader-image"></span>
  </div>
</div>
