<?php declare(strict_types=1);

namespace Ticketpark\Wsc\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class LiveStream
{
    const BILLING_MODE_PAY_AS_YOU_GO = 'pay_as_you_go';
    const BILLING_MODE_TWENTYFOUR_SEVEN = 'twentyfour_seven';

    const BROADCAST_LOCATION_ASIA_PACIFIC_AUSTRALIA = 'asia_pacific_australia';
    const BROADCAST_LOCATION_ASIA_PACIFIC_INDIA = 'asia_pacific_india';
    const BROADCAST_LOCATION_ASIA_PACIFIC_JAPAN = 'asia_pacific_japan';
    const BROADCAST_LOCATION_ASIA_PACIFIC_SINGAPORE = 'asia_pacific_singapore';
    const BROADCAST_LOCATION_ASIA_PACIFIC_S_KOREA = 'asia_pacific_s_korea';
    const BROADCAST_LOCATION_ASIA_PACIFIC_TAIWAN = 'asia_pacific_taiwan';
    const BROADCAST_LOCATION_EU_BELGIUM = 'eu_belgium';
    const BROADCAST_LOCATION_EU_GERMANY = 'eu_germany';
    const BROADCAST_LOCATION_EU_IRELAND = 'eu_ireland';
    const BROADCAST_LOCATION_SOUTH_AMERICA_BRAZIL = 'south_america_brazil';
    const BROADCAST_LOCATION_US_CENTRAL_IOWA = 'us_central_iowa';
    const BROADCAST_LOCATION_US_EAST_S_CAROLINA = 'us_east_s_carolina';
    const BROADCAST_LOCATION_US_EAST_VIRGINIA = 'us_east_virginia';
    const BROADCAST_LOCATION_US_WEST_CALIFORNIA = 'us_west_california';
    const BROADCAST_LOCATION_US_WEST_OREGON = 'us_west_oregon';

    CONST ENCODER_WOWZA_CLEARCASTER = 'wowza_clearcaster';
    CONST ENCODER_WOWZA_GOCODER = 'wowza_gocoder';
    CONST ENCODER_WOWZA_STREAMING_ENGINE = 'wowza_streaming_engine';
    CONST ENCODER_MEDIA_DS = 'media_ds';
    CONST ENCODER_AXIS = 'axis';
    CONST ENCODER_EPIPHAN = 'epiphan';
    CONST ENCODER_HAUPPAUGE = 'hauppauge';
    CONST ENCODER_JVC = 'jvc';
    CONST ENCODER_LIVE_U = 'live_u';
    CONST ENCODER_MATROX = 'matrox';
    CONST ENCODER_NEWTEK_TRICASTER = 'newtek_tricaster';
    CONST ENCODER_OSPREY = 'osprey';
    CONST ENCODER_SONY = 'sony';
    CONST ENCODER_TELESTREAM_WIRECAST = 'telestream_wirecast';
    CONST ENCODER_TERADEK_CUBE = 'teradek_cube';
    CONST ENCODER_VMIX = 'vmix';
    CONST ENCODER_X_SPLIT = 'x_split';
    CONST ENCODER_IPCAMERA = 'ipcamera';
    CONST ENCODER_OTHER_RTMP = 'other_rtmp';
    CONST ENCODER_OTHER_RTSP = 'other_rtsp';
    CONST ENCODER_OTHER_WEBRTC = 'other_webrtc';

    CONST TRANSCODER_TYPE_TRANSCODED = 'transcoded';
    CONST TRANSCODER_TYPE_PASSTHROUGH = 'passthrough';

    CONST CLOSED_CAPTION_TYPE_NONE = 'none';
    CONST CLOSED_CAPTION_TYPE_CEA = 'cea';
    CONST CLOSED_CAPTION_TYPE_ON_TEXT = 'on_text';
    CONST CLOSED_CAPTION_BOTH = 'both';

    CONST DELIVERY_METHOD_PULL = 'pull';
    CONST DELIVERY_METHOD_CDN = 'cdn';
    CONST DELIVERY_METHOD_PUSH = 'push';

    CONST DELIVERY_TYPE_SINGLE_BITRATE = 'single-bitrate';
    CONST DELIVERY_TYPE_MULTI_BITRATE = 'multi-bitrate';

    CONST PLAYER_LOGO_POSITION_TOP_LEFT = 'top-left';
    CONST PLAYER_LOGO_POSITION_TOP_RIGHT = 'top-right';
    CONST PLAYER_LOGO_POSITION_BOTTOM_LEFT = 'bottom-left';
    CONST PLAYER_LOGO_POSITION_BOTTOM_RIGHT = 'bottom-right';

    CONST PLAYER_TYPE_HTML5 = 'original_html5';
    CONST PLAYER_TYPE_WOWZA = 'wowza_player';

    /**
     * @var string
     * @SerializedName("id")
     * @Type("string")
     */
    private $id;

    /**
     * @var int
     * @SerializedName("aspect_ratio_height")
     * @Type("int")
     */
    private $aspectRatioHeight;

    /**
     * @var int
     * @SerializedName("aspect_ratio_width")
     * @Type("int")
     */
    private $aspectRatioWidth;

    /**
     * @var string
     * @SerializedName("billing_mode")
     * @Type("string")
     */
    private $billingMode;

    /**
     * @var string
     * @SerializedName("broadcast_location")
     * @Type("string")
     */
    private $broadcastLocation;

    /**
     * @var string
     * @SerializedName("encoder")
     * @Type("string")
     */
    private $encoder;

    /**
     * @var string
     * @SerializedName("name")
     * @Type("string")
     */
    private $name;

    /**
     * @var string
     * @SerializedName("transcoder_type")
     * @Type("string")
     */
    private $transcoderType;

    /**
     * @var string
     * @SerializedName("closed_caption_type")
     * @Type("string")
     */
    private $closedCaptionType;

    /**
     * @var string
     * @SerializedName("connection_code")
     * @Type("string")
     */
    private $connectionCode;

    /**
     * @var \DateTime
     * @SerializedName("connection_code_expires_at")
     * @Type("DateTimeImmutable<'Y-m-d\TH:i:s.uT'>")
     */
    private $connectionCodeExpiresAt;

    /**
     * @var string
     * @SerializedName("delivery_method")
     * @Type("string")
     */
    private $deliveryMethod;

    /**
     * @var string[]
     * @SerializedName("delivery_protocols")
     * @Type("array<string>")
     */
    private $deliveryProtocols;

    /**
     * @var SourceConnectionInformation
     * @SerializedName("source_connection_information")
     * @Type("Ticketpark\Wsc\Container\SourceConnectionInformation")
     */
    private $sourceConnectionInformation;

    /**
     * @var string
     * @SerializedName("delivery_type")
     * @Type("string")
     */
    private $deliveryType;

    /**
     * @var bool
     * @SerializedName("disable_authentication")
     * @Type("boolean")
     */
    private $disableAuthentication;

    /**
     * @var bool
     * @SerializedName("hosted_page")
     * @Type("boolean")
     */
    private $hostedPage;

    /**
     * @var string
     * @SerializedName("hosted_page_description")
     * @Type("string")
     */
    private $hostedPageDescription;

    /**
     * @var string
     * @SerializedName("hosted_page_logo_image")
     * @Type("string")
     */
    private $hostedPageLogoImage;

    /**
     * @var bool
     * @SerializedName("hosted_page_sharing_icons")
     * @Type("bool")
     */
    private $hostedPageSharingIcons;

    /**
     * @var string
     * @SerializedName("hosted_page_title")
     * @Type("string")
     */
    private $hostedPageTitle;

    /**
     * @var bool
     * @SerializedName("low_latency")
     * @Type("boolean")
     */
    private $lowLatency;

    /**
     * @var string
     * @SerializedName("password")
     * @Type("string")
     */
    private $password;

    /**
     * @var bool
     * @SerializedName("player_countdown")
     * @Type("boolean")
     */
    private $playerCountdown;

    /**
     * @var \DateTime
     * @SerializedName("player_countdown_at")
     * @Type("DateTime<'Y-m-d\TH:i:s.uT'>")
     */
    private $playerCountdownAt;

    /**
     * @var string
     * @SerializedName("player_logo_image")
     * @Type("string")
     */
    private $playerLogoImage;

    /**
     * @var string
     * @SerializedName("player_logo_position")
     * @Type("string")
     */
    private $playerLogoPosition;

    /**
     * @var bool
     * @SerializedName("player_responsive")
     * @Type("boolean")
     */
    private $playerResponsive;

    /**
     * @var string
     * @SerializedName("player_type")
     * @Type("string")
     */
    private $playerType;

    /**
     * @var string
     * @SerializedName("player_video_poster_image")
     * @Type("string")
     */
    private $playerVideoPosterImage;

    /**
     * @var int
     * @SerializedName("player_width")
     * @Type("int")
     */
    private $playerWidth;

    /**
     * @var string
     * @SerializedName("player_embed_code")
     * @Type("string")
     */
    private $playerEmbedCode;

    /**
     * @var string
     * @SerializedName("player_hls_playback_url")
     * @Type("string")
     */
    private $playerHlsPlaybackUrl;

    /**
     * @var bool
     * @SerializedName("recording")
     * @Type("boolean")
     */
    private $recording;

    /**
     * @var bool
     * @SerializedName("remove_hosted_page_logo_image")
     * @Type("boolean")
     */
    private $removeHostedPageLogoImage;

    /**
     * @var bool
     * @SerializedName("remove_player_logo_image")
     * @Type("boolean")
     */
    private $removePlayerLogoImage;

    /**
     * @var bool
     * @SerializedName("remove_player_video_poster_image")
     * @Type("boolean")
     */
    private $removePlayerVideoPosterImage;

    /**
     * @var string
     * @SerializedName("source_url")
     * @Type("string")
     */
    private $sourceUrl;

    /**
     * @var string
     * @SerializedName("stream_source_id")
     * @Type("string")
     */
    private $streamSourceId;

    /**
     * @var Id[]
     * @SerializedName("stream_targets")
     * @Type("array<Ticketpark\Wsc\Container\Id>")
     */
    private $streamTargets;

    /**
     * @var string
     * @SerializedName("target_delivery_protocol")
     * @Type("string")
     */
    private $targetDeliveryProtocol;

    /**
     * @var bool
     * @SerializedName("use_stream_source")
     * @Type("boolean")
     */
    private $useStreamSource;

    /**
     * @var string
     * @SerializedName("username")
     * @Type("string")
     */
    private $username;

    /**
     * @var \DateTime
     * @SerializedName("created_at")
     * @Type("DateTimeImmutable<'Y-m-d\TH:i:s.uT'>")
     */
    private $createdAt;

    /**
     * @var \DateTime
     * @SerializedName("updated_at")
     * @Type("DateTimeImmutable<'Y-m-d\TH:i:s.uT'>")
     */
    private $updatedAt;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getAspectRatioHeight(): int
    {
        return $this->aspectRatioHeight;
    }

    public function setAspectRatioHeight(int $aspectRatioHeight): self
    {
        $this->aspectRatioHeight = $aspectRatioHeight;
        
        return $this;
    }

    public function getAspectRatioWidth(): int
    {
        return $this->aspectRatioWidth;
    }

    public function setAspectRatioWidth(int $aspectRatioWidth): self
    {
        $this->aspectRatioWidth = $aspectRatioWidth;
        
        return $this;
    }

    public function getBillingMode(): string
    {
        return $this->billingMode;
    }

    public function setBillingMode(string $billingMode): self
    {
        $this->billingMode = $billingMode;
        
        return $this;
    }

    public function getBroadcastLocation(): string
    {
        return $this->broadcastLocation;
    }

    public function setBroadcastLocation(string $broadcastLocation): self
    {
        $this->broadcastLocation = $broadcastLocation;
        
        return $this;
    }

    public function getEncoder(): string
    {
        return $this->encoder;
    }

    public function setEncoder(string $encoder): self
    {
        $this->encoder = $encoder;
        
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        
        return $this;
    }

    public function getTranscoderType(): string
    {
        return $this->transcoderType;
    }

    public function setTranscoderType(string $transcoderType): self
    {
        $this->transcoderType = $transcoderType;
        
        return $this;
    }

    public function getClosedCaptionType(): ?string
    {
        return $this->closedCaptionType;
    }

    public function setClosedCaptionType(string $closedCaptionType): self
    {
        $this->closedCaptionType = $closedCaptionType;
        
        return $this;
    }

    public function getConnectionCode(): ?string
    {
        return $this->connectionCode;
    }

    public function setConnectionCode(string $connectionCode): self
    {
        $this->connectionCode = $connectionCode;
        return $this;
    }

    public function getConnectionCodeExpiresAt(): ?\DateTime
    {
        return $this->connectionCodeExpiresAt;
    }

    public function setConnectionCodeExpiresAt(\DateTime $connectionCodeExpiresAt): self
    {
        $this->connectionCodeExpiresAt = $connectionCodeExpiresAt;

        return $this;
    }

    public function getDeliveryMethod(): ?string
    {
        return $this->deliveryMethod;
    }

    public function setDeliveryMethod(string $deliveryMethod): self
    {
        $this->deliveryMethod = $deliveryMethod;
        
        return $this;
    }

    public function getDeliveryProtocols(): ?array
    {
        return $this->deliveryProtocols;
    }

    public function setDeliveryProtocols(array $deliveryProtocols): self
    {
        $this->deliveryProtocols = $deliveryProtocols;
        
        return $this;
    }

    public function getSourceConnectionInformation(): ?SourceConnectionInformation
    {
        return $this->sourceConnectionInformation;
    }

    public function setSourceConnectionInformation(SourceConnectionInformation $sourceConnectionInformation): self
    {
        $this->sourceConnectionInformation = $sourceConnectionInformation;

        return $this;
    }

    public function getDeliveryType(): ?string
    {
        return $this->deliveryType;
    }

    public function setDeliveryType(string $deliveryType): self
    {
        $this->deliveryType = $deliveryType;
        
        return $this;
    }

    public function isDisableAuthentication(): ?bool
    {
        return $this->disableAuthentication;
    }

    public function setDisableAuthentication(bool $disableAuthentication): self
    {
        $this->disableAuthentication = $disableAuthentication;
        
        return $this;
    }

    public function isHostedPage(): ?bool
    {
        return $this->hostedPage;
    }

    public function setHostedPage(bool $hostedPage): self
    {
        $this->hostedPage = $hostedPage;
        
        return $this;
    }

    public function getHostedPageDescription(): ?string
    {
        return $this->hostedPageDescription;
    }

    public function setHostedPageDescription(string $hostedPageDescription): self
    {
        $this->hostedPageDescription = $hostedPageDescription;
        
        return $this;
    }

    public function getHostedPageLogoImage(): ?string
    {
        return $this->hostedPageLogoImage;
    }

    public function setHostedPageLogoImage(string $hostedPageLogoImage): self
    {
        $this->hostedPageLogoImage = $hostedPageLogoImage;
        
        return $this;
    }

    public function isHostedPageSharingIcons(): ?bool
    {
        return $this->hostedPageSharingIcons;
    }

    public function setHostedPageSharingIcons(bool $hostedPageSharingIcons): self
    {
        $this->hostedPageSharingIcons = $hostedPageSharingIcons;
        
        return $this;
    }

    public function getHostedPageTitle(): ?string
    {
        return $this->hostedPageTitle;
    }

    public function setHostedPageTitle(string $hostedPageTitle): self
    {
        $this->hostedPageTitle = $hostedPageTitle;
        
        return $this;
    }

    public function isLowLatency(): ?bool
    {
        return $this->lowLatency;
    }

    public function setLowLatency(bool $lowLatency): self
    {
        $this->lowLatency = $lowLatency;
        
        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;
        
        return $this;
    }

    public function isPlayerCountdown(): ?bool
    {
        return $this->playerCountdown;
    }

    public function setPlayerCountdown(bool $playerCountdown): self
    {
        $this->playerCountdown = $playerCountdown;
        
        return $this;
    }

    public function getPlayerCountdownAt(): ?\DateTime
    {
        return $this->playerCountdownAt;
    }

    public function setPlayerCountdownAt(\DateTime $playerCountdownAt): self
    {
        $this->playerCountdownAt = $playerCountdownAt;
        
        return $this;
    }

    public function getPlayerLogoImage(): ?string
    {
        return $this->playerLogoImage;
    }

    public function setPlayerLogoImage(string $playerLogoImage): self
    {
        $this->playerLogoImage = $playerLogoImage;
        
        return $this;
    }

    public function getPlayerLogoPosition(): ?string
    {
        return $this->playerLogoPosition;
    }

    public function setPlayerLogoPosition(string $playerLogoPosition): self
    {
        $this->playerLogoPosition = $playerLogoPosition;
        
        return $this;
    }

    public function isPlayerResponsive(): ?bool
    {
        return $this->playerResponsive;
    }

    public function setPlayerResponsive(bool $playerResponsive): self
    {
        $this->playerResponsive = $playerResponsive;
        
        return $this;
    }

    public function getPlayerType(): ?string
    {
        return $this->playerType;
    }

    public function setPlayerType(string $playerType): self
    {
        $this->playerType = $playerType;
        
        return $this;
    }

    public function getPlayerVideoPosterImage(): ?string
    {
        return $this->playerVideoPosterImage;
    }

    public function setPlayerVideoPosterImage(string $playerVideoPosterImage): self
    {
        $this->playerVideoPosterImage = $playerVideoPosterImage;
        
        return $this;
    }

    public function getPlayerWidth(): ?int
    {
        return $this->playerWidth;
    }

    public function setPlayerWidth(int $playerWidth): self
    {
        $this->playerWidth = $playerWidth;
        
        return $this;
    }

    public function getPlayerEmbedCode(): ?string
    {
        return $this->playerEmbedCode;
    }

    public function setPlayerEmbedCode(string $playerEmbedCode): self
    {
        $this->playerEmbedCode = $playerEmbedCode;

        return $this;
    }

    public function getPlayerHlsPlaybackUrl(): ?string
    {
        return $this->playerHlsPlaybackUrl;
    }

    public function setPlayerHlsPlaybackUrl(string $playerHlsPlaybackUrl): self
    {
        $this->playerHlsPlaybackUrl = $playerHlsPlaybackUrl;

        return $this;
    }

    public function isRecording(): ?bool
    {
        return $this->recording;
    }

    public function setRecording(bool $recording): self
    {
        $this->recording = $recording;
        
        return $this;
    }

    public function isRemoveHostedPageLogoImage(): ?bool
    {
        return $this->removeHostedPageLogoImage;
    }

    public function setRemoveHostedPageLogoImage(bool $removeHostedPageLogoImage): self
    {
        $this->removeHostedPageLogoImage = $removeHostedPageLogoImage;
        
        return $this;
    }

    public function isRemovePlayerLogoImage(): ?bool
    {
        return $this->removePlayerLogoImage;
    }

    public function setRemovePlayerLogoImage(bool $removePlayerLogoImage): self
    {
        $this->removePlayerLogoImage = $removePlayerLogoImage;
        
        return $this;
    }

    public function isRemovePlayerVideoPosterImage(): ?bool
    {
        return $this->removePlayerVideoPosterImage;
    }

    public function setRemovePlayerVideoPosterImage(bool $removePlayerVideoPosterImage): self
    {
        $this->removePlayerVideoPosterImage = $removePlayerVideoPosterImage;
        
        return $this;
    }

    public function getSourceUrl(): ?string
    {
        return $this->sourceUrl;
    }

    public function setSourceUrl(string $sourceUrl): self
    {
        $this->sourceUrl = $sourceUrl;
        
        return $this;
    }

    public function getStreamSourceId(): ?string
    {
        return $this->streamSourceId;
    }

    public function setStreamSourceId(string $streamSourceId): self
    {
        $this->streamSourceId = $streamSourceId;
        return $this;
    }

    public function getStreamTargets(): ?array
    {
        return $this->streamTargets;
    }

    public function setStreamTargets(array $streamTargets): self
    {
        $this->streamTargets = $streamTargets;

        return $this;
    }

    public function getTargetDeliveryProtocol(): ?string
    {
        return $this->targetDeliveryProtocol;
    }

    public function setTargetDeliveryProtocol(string $targetDeliveryProtocol): self
    {
        $this->targetDeliveryProtocol = $targetDeliveryProtocol;
        
        return $this;
    }

    public function isUseStreamSource(): ?bool
    {
        return $this->useStreamSource;
    }

    public function setUseStreamSource(bool $useStreamSource): self
    {
        $this->useStreamSource = $useStreamSource;
        
        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;
        
        return $this;
    }

    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTime $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
