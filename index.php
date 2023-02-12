<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My GitHub Page</title>
  <style>
    body {
      font-family: sans-serif;
      margin: 0;
      padding: 0;
    }
    header {
      background-color: lightgray;
      padding: 20px;
    }
    .container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }
    h1 {
      font-size: 36px;
      text-align: center;
      margin-bottom: 20px;
    }
    img {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      display: block;
      margin: 0 auto;
    }
    .bio {
      text-align: center;
      margin-bottom: 20px;
    }
    .projects {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }
    .project {
      width: 30%;
      margin-bottom: 20px;
    }
    .project h2 {
      font-size: 24px;
      margin-bottom: 10px;
    }
    .project img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }
  </style>
</head>
<body>
  <header>
    <div class="container">
      <h1>My GitHub Page</h1>
    </div>
  </header>
  <div class="container">
    <img src="https://via.placeholder.com/100x100" alt="Profile picture">
    <div class="bio">
      <p>I am a software developer with a passion for building amazing things. My goal is to create applications that are both functional and beautiful.</p>
    </div>
    <h2>My Projects</h2>
    <div class="projects">
      <div class="project">
        <h2>Project 1</h2>
        <img src="https://via.placeholder.com/300x200" alt="Project 1 screenshot">
      </div>
      <div class="project">
        <h2>Project 2</h2>
        <img src="https://via.placeholder.com/300x200" alt="Project 2 screenshot">
      </div>
      <div class="project">
        <h2>Project 3</h2>
        <img src="https://via.placeholder.com/300x200" alt="Project 3 screenshot">
      </div>
    </div>
  </div>
</body>
</html>
