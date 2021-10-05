<?php
namespace Datapage\DatapageSDK\Http\Resources\VeterinarioAPI\Traits;

use Datapage\DatapageSDK\Support\RequestBuilder;

trait TiposEspecialidadesResource
{
    public function findAllTiposEspecialidades($query = '', $headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder("{$this->baseUrl}/api/$apiVersao/tipos-especialidades?{$query}", __FUNCTION__);
        $request->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }

    public function findByTipoEspecialidadeId($id, $query = '', $headers = [], $apiVersao = 'v1')
    {
        $request = new RequestBuilder( "{$this->baseUrl}/api/$apiVersao/tipos-especialidades/{$id}?{$query}", __FUNCTION__);
        $request->withHeaders($headers);

        return $this->parse($request, $apiVersao);
    }
}
