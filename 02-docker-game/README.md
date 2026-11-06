- Choose any game from GitHub.
- Create a Docker image that runs this game.
- Ideally, the game should consist solely of static files; otherwise, you will need to build it. This is also acceptable, provided you understand the build instructions. The final output for this task should be static files that can be served using Nginx.

There are at least three approaches to building the image that should be demonstrated and discussed:
1. Build the game beforehand and "embed" the finished code into an Nginx image, resulting in an image that contains the game.
2. Build the game during the image creation process. The resulting image contains a configured Nginx instance along with the ready-to-serve static game files.
3. Include a script in the image that downloads and builds the game when the container starts; the container only becomes functional once this process is complete.
