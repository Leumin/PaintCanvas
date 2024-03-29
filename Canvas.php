<?php
/**
 * Created by PhpStorm.
 * User: leumin
 * Date: 08-13-19
 * Time: 12:22 AM
 */

class Canvas implements \Ratchet\MessageComponentInterface
{


    private $conexiones = [];
    private $conection;

    public function __construct(PDO $pdo)
    {
        $this->conection = $pdo;
    }

    /**
     * When a new connection is opened it will be passed to this method
     * @param \Ratchet\ConnectionInterface $conn The socket/connection that just connected to your application
     * @throws \Exception
     */
    function onOpen(\Ratchet\ConnectionInterface $conn)
    {
        $this->conexiones[] = $conn;

    }

    /**
     * This is called before or after a socket is closed (depends on how it's closed).  SendMessage to $conn will not result in an error if it has already been closed.
     * @param \Ratchet\ConnectionInterface $conn The socket/connection that is closing/closed
     * @throws \Exception
     */
    function onClose(\Ratchet\ConnectionInterface $conn)
    {
        // TODO: Implement onClose() method.
    }

    /**
     * If there is an error with one of the sockets, or somewhere in the application where an Exception is thrown,
     * the Exception is sent back down the stack, handled by the Server and bubbled back up the application through this method
     * @param \Ratchet\ConnectionInterface $conn
     * @param \Exception $e
     * @throws \Exception
     */
    function onError(\Ratchet\ConnectionInterface $conn, \Exception $e)
    {
        // TODO: Implement onError() method.
    }

    /**
     * Triggered when a client sends data through the socket
     * @param \Ratchet\ConnectionInterface $from The socket/connection that sent the message to your application
     * @param string $msg The message received
     * @throws \Exception
     */
    function onMessage(\Ratchet\ConnectionInterface $from, $msg)
    {

    }
}