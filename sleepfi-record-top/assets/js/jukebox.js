document.addEventListener('DOMContentLoaded', () => {
  const audio = document.getElementById("audioPlayer");
  const jukebox = document.getElementById("jukebox");
  const playPauseBtn = document.getElementById("playPauseBtn");
  const trackArtist = document.getElementById("track-artist");
  const trackTitle = document.getElementById("track-title");

  const tickerInner = document.getElementById("tickerText"); // ← ここ

  function updateTicker(artist, title) {
    const text = `${artist} - ${title} ／`;
    tickerInner.innerHTML = `
      <span>${text}</span>
      <span>${text}</span>
      <span>${text}</span>
    `;

    // ★ アニメをリセットしてから再スタートさせるおまじない
    tickerInner.style.animation = "none";
    void tickerInner.offsetWidth;      // リフローでリセット
    tickerInner.style.animation = "scroll 14s linear infinite";
    tickerInner.style.animationPlayState = "running";
  }

  playPauseBtn.textContent = "►";

  const goodsCards = document.querySelectorAll("[data-frame='goodsCard']");
  let currentTrack = null;

  goodsCards.forEach(card => {
    card.addEventListener("click", () => {
      const audioSrc = card.dataset.audio;

      if (currentTrack === audioSrc) {
        if (audio.paused) {
          audio.play();
          playPauseBtn.textContent = "❚❚";
          jukebox.classList.add("playing");
          tickerInner.style.animationPlayState = "running";
        } else {
          audio.pause();
          playPauseBtn.textContent = "►";
          jukebox.classList.remove("playing");
          tickerInner.style.animationPlayState = "paused";
        }
        return;
      }

      goodsCards.forEach(c => c.classList.remove("playing"));
      card.classList.add("playing");

      currentTrack = audioSrc;
      audio.src = audioSrc;
      audio.play();

      const artist = card.querySelector("h3:nth-of-type(1)")?.textContent || "";
      const title = card.querySelector("h3:nth-of-type(2)")?.textContent || "";
      console.log("DEBUG →", artist, title); // ← 追加

      trackArtist.textContent = artist;
      trackTitle.textContent = title;

      // ★ ここでテキストもアニメもまとめて更新
      updateTicker(artist, title);

      jukebox.classList.add("playing");
      playPauseBtn.textContent = "❚❚";
    });
  });

  playPauseBtn.addEventListener("click", () => {
    if (!currentTrack) return;

    if (audio.paused) {
      audio.play();
      playPauseBtn.textContent = "❚❚";
      jukebox.classList.add("playing");
      tickerInner.style.animationPlayState = "running";
    } else {
      audio.pause();
      playPauseBtn.textContent = "►";
      jukebox.classList.remove("playing");
      tickerInner.style.animationPlayState = "paused";
    }
  });

  audio.addEventListener("pause", () => {
    goodsCards.forEach(c => c.classList.remove("playing"));
    tickerInner.style.animationPlayState = "paused";
  });

  audio.addEventListener("ended", () => {
    playPauseBtn.textContent = "►";
    jukebox.classList.remove("playing");
    goodsCards.forEach(c => c.classList.remove("playing"));
    tickerInner.style.animationPlayState = "paused";
  });
});
