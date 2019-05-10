<?php

namespace firestark;

class jsonresponse extends response
{
    protected $jsonheaders =
    [
        'Content-Type' => 'application/json',
    ];

	private $unpreparedContent = null;

	public function __construct ( $content = '', int $status = 200, array $headers = [ ] )
	{
        $this->unpreparedContent = $content;
		$this->content = $this->prepare ( [ 'content' => $content ] );
		$this->status = $status;

		$this->headers = array_merge ( $this->headers, $this->jsonheaders, $headers );
	}

	public function status ( int $number )
	{
		$this->headers [ 'Firestark-Status' ] = $number;
		$this->content = $this->prepare
			( [ 'status' => $number, 'content' => $this->unpreparedContent ] );
	}

    protected function prepare ( $content ) : string
    {
        if ( is_array ( $content ) and ! $this->hasStringKeys ( $content ) )
            $content = array_values ( $content );

        return json_encode ( $content, JSON_UNESCAPED_SLASHES );
    }

    private function hasStringKeys ( array $array ) : bool
    {
        return count ( array_filter ( array_keys ( $array ), 'is_string' ) ) > 0;
    }
}