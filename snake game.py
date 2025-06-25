
import random
import time

# Initialize Pygame
pygame.init()

# Set up the game window
width = 800
height = 600
window = pygame.display.set_mode((width, height))
pygame.display.set_caption("Snake Game")

# Colors
BLACK = (0, 0, 0)
WHITE = (255, 255, 255)
RED = (255, 0, 0)
GREEN = (0, 255, 0)

# Snake and food properties
snake_block = 20
snake_speed = 15

# Initialize clock
clock = pygame.time.Clock()

class Snake:
    def __init__(self):
        self.x = width // 2
        self.y = height // 2
        self.dx = snake_block
        self.dy = 0
        self.body = []
        self.length = 1

    def move(self):
        # Update position
        self.x += self.dx
        self.y += self.dy

        # Add current position to body
        self.body.append([self.x, self.y])
        if len(self.body) > self.length:
            del self.body[0]

    def draw(self, window):
        for segment in self.body:
            pygame.draw.rect(window, GREEN, [segment[0], segment[1], snake_block, snake_block])

    def check_collision(self):
        # Check wall collision
        if (self.x >= width or self.x < 0 or
            self.y >= height or self.y < 0):
            return True

        # Check self collision
        for segment in self.body[:-1]:
            if segment == [self.x, self.y]:
                return True
        return False

def spawn_food():
    food_x = round(random.randrange(0, width - snake_block) / snake_block) * snake_block
    food_y = round(random.randrange(0, height - snake_block) / snake_block) * snake_block
    return food_x, food_y

def display_score(score):
    font = pygame.font.SysFont(None, 50)
    score_text = font.render(f"Score: {score}", True, WHITE)
    window.blit(score_text, [10, 10])

def game_loop():
    game_over = False
    snake = Snake()
    food_x, food_y = spawn_food()
    score = 0

    while not game_over:
        for event in pygame.event.get():
            if event.type == pygame.QUIT:
                game_over = True
            if event.type == pygame.KEYDOWN:
                if event.key == pygame.K_LEFT and snake.dx != snake_block:
                    snake.dx = -snake_block
                    snake.dy = 0
                elif event.key == pygame.K_RIGHT and snake.dx != -snake_block:
                    snake.dx = snake_block
                    snake.dy = 0
                elif event.key == pygame.K_UP and snake.dy != snake_block:
                    snake.dx = 0
                    snake.dy = -snake_block
                elif event.key == pygame.K_DOWN and snake.dy != -snake_block:
                    snake.dx = 0
                    snake.dy = snake_block

        # Move snake
        snake.move()

        # Check collision
        if snake.check_collision():
            game_over = True

        # Check food collision
        if snake.x == food_x and snake.y == food_y:
            food_x, food_y = spawn_food()
            snake.length += 1
            score += 1

        # Draw everything
        window.fill(BLACK)
        snake.draw(window)
        pygame.draw.rect(window, RED, [food_x, food_y, snake_block, snake_block])
        display_score(score)
        pygame.display.update()

        clock.tick(snake_speed)

    # Game over screen
    font = pygame.font.SysFont(None, 75)
    game_over_text = font.render(f"Game Over! Score: {score}", True, WHITE)
    window.blit(game_over_text, [width//4, height//2])
    pygame.display.update()
    time.sleep(2)

    pygame.quit()
    quit()

# Start the game
game_loop()
