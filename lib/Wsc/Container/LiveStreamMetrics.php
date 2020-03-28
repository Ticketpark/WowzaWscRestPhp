<?php declare(strict_types=1);

namespace Ticketpark\Wsc\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class LiveStreamMetrics
{
    /**
     * @var Metric
     * @SerializedName("audio_codec")
     * @Type("Ticketpark\Wsc\Container\Metric")
     */
    private $audioCodec;

    /**
     * @var Metric
     * @SerializedName("bits_in_rate")
     * @Type("Ticketpark\Wsc\Container\Metric")
     */
    private $bitsInRate;

    /**
     * @var Metric
     * @SerializedName("bits_out_rate")
     * @Type("Ticketpark\Wsc\Container\Metric")
     */
    private $bitsOutRate;

    /**
     * @var Metric
     * @SerializedName("bytes_in_rate")
     * @Type("Ticketpark\Wsc\Container\Metric")
     */
    private $bytesInRate;

    /**
     * @var Metric
     * @SerializedName("bytes_out_rate")
     * @Type("Ticketpark\Wsc\Container\Metric")
     */
    private $bytesOutRate;

    /**
     * @var Metric
     * @SerializedName("configured_bytes_out_rate")
     * @Type("Ticketpark\Wsc\Container\Metric")
     */
    private $configuredBytesOutRate;

    /**
     * @var Metric
     * @SerializedName("connected")
     * @Type("Ticketpark\Wsc\Container\Metric")
     */
    private $connected;

    /**
     * @var Metric
     * @SerializedName("frame_size")
     * @Type("Ticketpark\Wsc\Container\Metric")
     */
    private $frameSize;

    /**
     * @var Metric
     * @SerializedName("frame_rate")
     * @Type("Ticketpark\Wsc\Container\Metric")
     */
    private $frameRate;

    /**
     * @var Metric
     * @SerializedName("height")
     * @Type("Ticketpark\Wsc\Container\Metric")
     */
    private $height;

    /**
     * @var Metric
     * @SerializedName("keyframe_interval")
     * @Type("Ticketpark\Wsc\Container\Metric")
     */
    private $keyframeInterval;

    /**
     * @var Metric
     * @SerializedName("stream_target_status_OUTPUTIDX_STREAMTARGETIDX")
     * @Type("Ticketpark\Wsc\Container\Metric")
     */
    private $streamTargetStatusOUTPUTIDXSTREAMTARGETIDX;

    /**
     * @var Metric
     * @SerializedName("unique_views")
     * @Type("Ticketpark\Wsc\Container\Metric")
     */
    private $uniqueViews;

    /**
     * @var Metric
     * @SerializedName("video_codec")
     * @Type("Ticketpark\Wsc\Container\Metric")
     */
    private $videoCodec;

    /**
     * @var Metric
     * @SerializedName("width")
     * @Type("Ticketpark\Wsc\Container\Metric")
     */
    private $width;

    public function getAudioCodec(): ?Metric
    {
        return $this->audioCodec;
    }

    public function setAudioCodec(Metric $audioCodec): self
    {
        $this->audioCodec = $audioCodec;
        
        return $this;
    }

    public function getBitsInRate(): ?Metric
    {
        return $this->bitsInRate;
    }

    public function setBitsInRate(Metric $bitsInRate): self
    {
        $this->bitsInRate = $bitsInRate;
        
        return $this;
    }

    public function getBitsOutRate(): ?Metric
    {
        return $this->bitsOutRate;
    }

    public function setBitsOutRate(Metric $bitsOutRate): self
    {
        $this->bitsOutRate = $bitsOutRate;
        
        return $this;
    }

    public function getBytesInRate(): ?Metric
    {
        return $this->bytesInRate;
    }

    public function setBytesInRate(Metric $bytesInRate): self
    {
        $this->bytesInRate = $bytesInRate;
        
        return $this;
    }

    public function getBytesOutRate(): ?Metric
    {
        return $this->bytesOutRate;
    }

    public function setBytesOutRate(Metric $bytesOutRate): self
    {
        $this->bytesOutRate = $bytesOutRate;
        
        return $this;
    }

    public function getConfiguredBytesOutRate(): ?Metric
    {
        return $this->configuredBytesOutRate;
    }

    public function setConfiguredBytesOutRate(Metric $configuredBytesOutRate): self
    {
        $this->configuredBytesOutRate = $configuredBytesOutRate;
        
        return $this;
    }

    public function getConnected(): ?Metric
    {
        return $this->connected;
    }

    public function setConnected(Metric $connected): self
    {
        $this->connected = $connected;
        
        return $this;
    }

    public function getFrameSize(): ?Metric
    {
        return $this->frameSize;
    }

    public function setFrameSize(Metric $frameSize): self
    {
        $this->frameSize = $frameSize;
        
        return $this;
    }

    public function getFrameRate(): ?Metric
    {
        return $this->frameRate;
    }

    public function setFrameRate(Metric $frameRate): self
    {
        $this->frameRate = $frameRate;
        
        return $this;
    }

    public function getHeight(): ?Metric
    {
        return $this->height;
    }

    public function setHeight(Metric $height): self
    {
        $this->height = $height;
        
        return $this;
    }

    public function getKeyframeInterval(): ?Metric
    {
        return $this->keyframeInterval;
    }

    public function setKeyframeInterval(Metric $keyframeInterval): self
    {
        $this->keyframeInterval = $keyframeInterval;
        
        return $this;
    }

    public function getStreamTargetStatusOUTPUTIDXSTREAMTARGETIDX(): ?Metric
    {
        return $this->streamTargetStatusOUTPUTIDXSTREAMTARGETIDX;
    }

    public function setStreamTargetStatusOUTPUTIDXSTREAMTARGETIDX(Metric $streamTargetStatusOUTPUTIDXSTREAMTARGETIDX): self
    {
        $this->streamTargetStatusOUTPUTIDXSTREAMTARGETIDX = $streamTargetStatusOUTPUTIDXSTREAMTARGETIDX;
        
        return $this;
    }

    public function getUniqueViews(): ?Metric
    {
        return $this->uniqueViews;
    }

    public function setUniqueViews(Metric $uniqueViews): self
    {
        $this->uniqueViews = $uniqueViews;
        
        return $this;
    }

    public function getVideoCodec(): ?Metric
    {
        return $this->videoCodec;
    }

    public function setVideoCodec(Metric $videoCodec): self
    {
        $this->videoCodec = $videoCodec;
        
        return $this;
    }

    public function getWidth(): ?Metric
    {
        return $this->width;
    }

    public function setWidth(Metric $width): self
    {
        $this->width = $width;
        
        return $this;
    }
}
