<?php
class Point
{
    private int $x;
    private int $y;

    private static int $num_puntos = 0;

    public function __construct(int $x, int $y = 0)
    {
        $this->x = $x;
        $this->y = $y;
        self::$num_puntos++;
    }

    public function mostrarCoord(){
        echo "<p> X: " . $this->x . ", Y: " . $this->y .
        " Número objetos creados: ". self::$num_puntos ." </p>";
      
    }

    public static function getNumPuntos(): int
    {
        return self::$num_puntos;
    }

    public static function setNumPuntos(int $num_puntos): void
    {
        self::$num_puntos = $num_puntos;
    }

    

    /**
     * Get the value of x
     *
     * @return int
     */
    public function getX(): int
    {
        return $this->x;
    }

    /**
     * Set the value of x
     *
     * @param int $x
     *
     * @return self
     */
    public function setX(int $x): self
    {
        $this->x = $x;

        return $this;
    }

    /**
     * Get the value of y
     *
     * @return int
     */
    public function getY(): int
    {
        return $this->y;
    }

    /**
     * Set the value of y
     *
     * @param int $y
     *
     * @return self
     */
    public function setY(int $y): self
    {
        $this->y = $y;

        return $this;
    }
}
