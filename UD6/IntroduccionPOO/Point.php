<?php

class Point {
    private int $x;
    private int $y;
    private static int $num_puntos = 0;

    /**
     * @param int $x
     * @param int $y
     */
    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
        self::$num_puntos++;
    }

    public function mostrarCoord()
    {
        echo "<p> X: ". $this->x . ", Y: ". $this->y. " Número de objetos creados: ". self::$num_puntos ."</p>";
    }

}
