<?php
declare(strict_types=1);

namespace RadarrDaemon\Transformer;

use RadarrDaemon\DTO\MovieDTO;

final class MovieTransformer
{
    public function transform(array $movie): MovieDTO
    {
        return new MovieDTO(
            $movie['id'],
            $movie['title'],
            $movie['originalTitle'],
            $movie['sizeOnDisk'],
            $movie['status'],
            $movie['overview'],
            $movie['year'],
            $movie['hasFile'],
            $movie['monitored'],
            $movie['isAvailable'],
            $movie['folderName'],
            !isset($movie['movieFile']) ? false : !$movie['movieFile']['qualityCutoffNotMet']
        );
    }
}