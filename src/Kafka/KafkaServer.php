<?php

namespace Xnhd\Core\Kafka;

use Exception;
use Illuminate\Support\Facades\Log;

class KafkaServer
{
    public function producer($brokerList, $topic, $payload)
    {
        try {
            $conf = new \RdKafka\Conf();
            $conf->set('metadata.broker.list', $brokerList);

            $producer = new \RdKafka\Producer($conf);
            $topicSer = $producer->newTopic($topic);
            $topicSer->produce(RD_KAFKA_PARTITION_UA, 0, $payload);
            $producer->poll(0);

            for ($flushRetries = 0; $flushRetries < 10; $flushRetries++) {
                $result = $producer->flush(10000);
                if (RD_KAFKA_RESP_ERR_NO_ERROR === $result) {
                    break;
                }
            }

            if (RD_KAFKA_RESP_ERR_NO_ERROR !== $result) {
                Log::info($payload);
                return false;
                // throw new \RuntimeException('Was unable to flush, messages might be lost!');
            }
        } catch (Exception $e) {
            Log::info($e);
            return false;
        }
        return true;
    }
}
