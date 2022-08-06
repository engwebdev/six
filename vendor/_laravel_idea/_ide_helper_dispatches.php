<?php //3aaff2e04a232cfdf6fed7dae504b7b6
/** @noinspection all */

namespace App\Events {

    use App\Models\User;

    /**
     * @method static void broadcast(User $user)
     * @method static void dispatch(User $user)
     */
    class RegisterUser {}
}

namespace Illuminate\Foundation\Console {

    /**
     * @method static void dispatch(array $data)
     * @method static void dispatchNow(array $data)
     */
    class QueuedCommand {}
}

namespace Illuminate\Queue {

    /**
     * @method static void dispatch(SerializableClosure $closure)
     * @method static void dispatchNow(SerializableClosure $closure)
     */
    class CallQueuedClosure {}
}

namespace Laravel\Jetstream\Events {

    /**
     * @method static void broadcast($owner)
     * @method static void dispatch($owner)
     */
    class AddingTeam {}

    /**
     * @method static void broadcast($team, $user)
     * @method static void dispatch($team, $user)
     */
    class AddingTeamMember {}

    /**
     * @method static void broadcast($team, $email, $role)
     * @method static void dispatch($team, $email, $role)
     */
    class InvitingTeamMember {}

    /**
     * @method static void broadcast($team, $user)
     * @method static void dispatch($team, $user)
     */
    class RemovingTeamMember {}

    /**
     * @method static void broadcast($team, $user)
     * @method static void dispatch($team, $user)
     */
    class TeamMemberAdded {}

    /**
     * @method static void broadcast($team, $user)
     * @method static void dispatch($team, $user)
     */
    class TeamMemberRemoved {}

    /**
     * @method static void broadcast($team, $user)
     * @method static void dispatch($team, $user)
     */
    class TeamMemberUpdated {}
}
