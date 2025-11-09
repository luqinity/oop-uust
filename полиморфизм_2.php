<?php

interface Paragraph
{
    public function add_word(string $word): void;
    public function end(): void;
}

class LeftParagraph implements Paragraph
{
    private int $width;
    private array $lines = [];
    private array $currentLine = [];
    private int $currentLineLength = 0;

    public function __construct(int $width)
    {
        $this->width = $width;
    }

    public function add_word(string $word): void
    {
        // +1 для пробела при добавлении, если не первая буква
        $additionalLength = $this->currentLineLength > 0 ? 1 + strlen($word) : strlen($word);
        if ($this->currentLineLength + $additionalLength <= $this->width) {
            $this->currentLine[] = $word;
            $this->currentLineLength += $additionalLength;
        } else {
            $this->lines[] = implode(' ', $this->currentLine);
            $this->currentLine = [$word];
            $this->currentLineLength = strlen($word);
        }
    }

    public function end(): void
    {
        if (!empty($this->currentLine)) {
            $this->lines[] = implode(' ', $this->currentLine);
        }
        foreach ($this->lines as $line) {
            echo $line . "\n";
        }
        $this->lines = [];
        $this->currentLine = [];
        $this->currentLineLength = 0;
    }
}

class RightParagraph implements Paragraph
{
    private int $width;
    private array $lines = [];
    private array $currentLine = [];
    private int $currentLineLength = 0;

    public function __construct(int $width)
    {
        $this->width = $width;
    }

    public function add_word(string $word): void
    {
        $additionalLength = $this->currentLineLength > 0 ? 1 + strlen($word) : strlen($word);
        if ($this->currentLineLength + $additionalLength <= $this->width) {
            $this->currentLine[] = $word;
            $this->currentLineLength += $additionalLength;
        } else {
            $this->lines[] = implode(' ', $this->currentLine);
            $this->currentLine = [$word];
            $this->currentLineLength = strlen($word);
        }
    }

    public function end(): void
    {
        if (!empty($this->currentLine)) {
            $this->lines[] = implode(' ', $this->currentLine);
        }
        foreach ($this->lines as $line) {
            $space = $this->width - strlen($line);
            echo str_repeat(' ', $space) . $line . "\n";
        }
        $this->lines = [];
        $this->currentLine = [];
        $this->currentLineLength = 0;
    }
}