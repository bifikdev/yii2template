<?php

namespace app\components;

use yii\base\Component;
use \DateTime;

class ResponseDTO extends Component
{

    public $code;
    public $date;
    public $hasError;
    public $errors;
    public $data;

    const DEFAULT_CODE = 0;
    const SUCCESS_CODE = 200;
    const BAD_REQUEST_CODE = 400;
    const UNAUTHORIZED_CODE = 401;
    const FORBIDDEN_CODE = 403;
    const NOT_FOUND_CODE = 404;
    const METHOD_NOT_ALLOWED = 405;
    const GONE_CODE = 410;
    const INTERNAL_SERVER_ERROR_CODE = 500;


    /**
     * ResponseDTO constructor.
     * @param array $config
     * @throws \Exception
     */
    public function __construct(array $config = [])
    {
        $this->date = (new DateTime())->format('Y-m-d H:i:s');
        $this->code = self::SUCCESS_CODE;
        $this->hasError = false;
        parent::__construct($config);
    }


    /**
     * @param $data
     * @return ResponseDTO
     */
    public function setData($data): self
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @param string $message
     * @param int $statusCode
     * @return ResponseDTO
     */
    public function setError(string $message, int $statusCode = self::DEFAULT_CODE): self
    {
        $this->setData([]);
        $this->code = $statusCode;
        $this->errors[] = [
            'statusCode' => $statusCode,
            'message' => $message,
        ];
        $this->hasError = true;
        return $this;
    }

    /**
     * @param $message
     * @return ResponseDTO
     */
    public function setValidationError($message): self
    {
        return $this->setError($message, self::BAD_REQUEST_CODE);
    }

    /**
     * @return ResponseDTO
     */
    public function setNotFoundError(): self
    {
        return $this->setError('Not found', self::NOT_FOUND_CODE);
    }

    /**
     * @return ResponseDTO
     */
    public function setInternalServerError(): self
    {
        return $this->setError('Internal server error', self::INTERNAL_SERVER_ERROR_CODE);
    }


}