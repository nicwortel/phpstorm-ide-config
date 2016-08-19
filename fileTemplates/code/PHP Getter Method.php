public ${STATIC} function get${NAME}(): ${TYPE_HINT}
{
#if (${STATIC} == "static")
    return self::$${FIELD_NAME};
#else
    return $this->${FIELD_NAME};
#end
}
