/**
 * Get ${FIELD_NAME}
 *
 * @return ${TYPE_HINT}
 */
public ${STATIC} function get${NAME}()
{
#if (${STATIC} == "static")
    return self::$${FIELD_NAME};
#else
    return $this->${FIELD_NAME};
#end
}
